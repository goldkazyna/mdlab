var canvas = document.getElementById("homeHeroBg");
var width = canvas.width = window.innerWidth * 0.75;
var height = canvas.height = window.innerHeight * 0.75;


var gl = canvas.getContext('webgl');

var mouse = {x: 0, y: 0};

var numMetaballs = 30;
var metaballs = [];

var minRadius, maxRadius;

if (window.innerWidth <= 768) {
    // Мобильные устройства
    minRadius = 40;
    maxRadius = 50;
} else {
    // Десктоп
    minRadius = 40;
    maxRadius = 70;
}

for (var i = 0; i < numMetaballs; i++) {
    var radius = Math.random() * (maxRadius - minRadius) + minRadius;
    metaballs.push({
        x: Math.random() * (width - 2 * radius) + radius,
        y: Math.random() * (height - 2 * radius) + radius,
        vx: (Math.random() - 0.5) * 3,
        vy: (Math.random() - 0.5) * 3,
        r: radius * 0.75
    });
}

var vertexShaderSrc = `
attribute vec2 position;

void main() {
// position specifies only x and y.
// We set z to be 0.0, and w to be 1.0
gl_Position = vec4(position, 0.0, 1.0);
}
`;

var fragmentShaderSrc = `
precision highp float;

const float WIDTH = ` + (width >> 0) + `.0;
const float HEIGHT = ` + (height >> 0) + `.0;

uniform vec3 metaballs[` + numMetaballs + `];

void main(){
float x = gl_FragCoord.x;
float y = gl_FragCoord.y;

float sum = 0.0;
for (int i = 0; i < ` + numMetaballs + `; i++) {
vec3 metaball = metaballs[i];
float dx = metaball.x - x;
float dy = metaball.y - y;
float radius = metaball.z;

sum += (radius * radius) / (dx * dx + dy * dy);
}

// Мягкий fade от 0.9 до 1.0
float alpha = smoothstep(0.9, 1.0, sum);

// Цвет — по координатам, можно заменить чем угодно
vec3 color = vec3(0.937, 0.980, 1.0); // #EFFAFF

// Полупрозрачный градиентный след
gl_FragColor = vec4(color, alpha);

}

`;

var vertexShader = compileShader(vertexShaderSrc, gl.VERTEX_SHADER);
var fragmentShader = compileShader(fragmentShaderSrc, gl.FRAGMENT_SHADER);

var program = gl.createProgram();
gl.attachShader(program, vertexShader);
gl.attachShader(program, fragmentShader);
gl.linkProgram(program);
gl.useProgram(program);

var vertexData = new Float32Array([
    -1.0,  1.0, // top left
    -1.0, -1.0, // bottom left
    1.0,  1.0, // top right
    1.0, -1.0, // bottom right
]);
var vertexDataBuffer = gl.createBuffer();
gl.bindBuffer(gl.ARRAY_BUFFER, vertexDataBuffer);
gl.bufferData(gl.ARRAY_BUFFER, vertexData, gl.STATIC_DRAW);

var positionHandle = getAttribLocation(program, 'position');
gl.enableVertexAttribArray(positionHandle);
gl.vertexAttribPointer(positionHandle,
    2, // position is a vec2
    gl.FLOAT, // each component is a float
    gl.FALSE, // don't normalize values
    2 * 4, // two 4 byte float components per vertex
    0 // offset into each span of vertex data
);

var metaballsHandle = getUniformLocation(program, 'metaballs');

loop();
function loop() {
    for (var i = 0; i < numMetaballs; i++) {
        var metaball = metaballs[i];
        metaball.x += metaball.vx;
        metaball.y += metaball.vy;

        if (metaball.x < metaball.r || metaball.x > width - metaball.r) metaball.vx *= -1;
        if (metaball.y < metaball.r || metaball.y > height - metaball.r) metaball.vy *= -1;
    }

    var dataToSendToGPU = new Float32Array(3 * numMetaballs);
    for (var i = 0; i < numMetaballs; i++) {
        var baseIndex = 3 * i;
        var mb = metaballs[i];
        dataToSendToGPU[baseIndex + 0] = mb.x;
        dataToSendToGPU[baseIndex + 1] = mb.y;
        dataToSendToGPU[baseIndex + 2] = mb.r;
    }
    gl.uniform3fv(metaballsHandle, dataToSendToGPU);

    //Draw
    gl.drawArrays(gl.TRIANGLE_STRIP, 0, 4);

    requestAnimationFrame(loop);
}

function compileShader(shaderSource, shaderType) {
    var shader = gl.createShader(shaderType);
    gl.shaderSource(shader, shaderSource);
    gl.compileShader(shader);

    if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
        throw "Shader compile failed with: " + gl.getShaderInfoLog(shader);
    }

    return shader;
}

function getUniformLocation(program, name) {
    var uniformLocation = gl.getUniformLocation(program, name);
    if (uniformLocation === -1) {
        throw 'Can not find uniform ' + name + '.';
    }
    return uniformLocation;
}

function getAttribLocation(program, name) {
    var attributeLocation = gl.getAttribLocation(program, name);
    if (attributeLocation === -1) {
        throw 'Can not find attribute ' + name + '.';
    }
    return attributeLocation;
}

canvas.onmousemove = function(e) {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
}


$(document).ready(function () {
    function updateAOSAttributes() {
        if (window.innerWidth <= 576) {
            // Мобильная версия — вертикальное расположение
            $('.home-special__img').attr('data-aos', 'fade-up');
            $('.home-special__content').attr('data-aos', 'fade-up');
        } else {
            // Десктоп — горизонтальное
            $('.home-special__img').attr('data-aos', 'fade-right');
            $('.home-special__content').attr('data-aos', 'fade-left');
        }

        // Обновляем AOS, чтобы он применил новые значения
        AOS.refresh();
    }

    // При загрузке
    updateAOSAttributes();

    // При ресайзе (на всякий случай)
    $(window).on('resize', function () {
        updateAOSAttributes();
    });
});
