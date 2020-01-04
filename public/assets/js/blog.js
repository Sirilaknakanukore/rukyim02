var BACKSPACE = 8;
var ENTER = 13;
document.getElementById('search').addEventListener('keydown', adjust);
function adjust(e) {
    var val = e.target.value;
    if (e.keyCode === BACKSPACE && !val) {
        deleteTag();
    }
    if (e.keyCode === ENTER && val) {
        e.target.value = '';
        addTag(val);
    }
    var textLength = textLengthToPx(val);
    var inputWidth = e.target.offsetWidth;
    var minThreshold = 5;
    var maxThreshold = 200;
    var delta = inputWidth - textLength;
    var shouldGrow = delta < minThreshold;
    var shouldShrink = delta > maxThreshold;
    if (shouldGrow) {
        setStyle(e.target, 'width', '90%');
    } else
    if (shouldShrink) {
        e.target.style = '';
    }
}
function deleteTag() {
    document.querySelectorAll('#tags > span')[document.querySelectorAll('#tags > span').length - 1].remove();
}
function addTag(val) {
    var input = document.getElementById('search');
    var tag = document.createElement('span');
    var tagsContainer = document.getElementById('tags');
    var tags = document.querySelectorAll('.tag');
    tag.className = 'tag';
    tag.innerHTML = val;
    tagsContainer.insertBefore(tag, input);
}
function setStyle(node, rule, value) {
    node.style = rule + ":" + value;
}
function status(res) {
    document.getElementById('res').innerHTML = res;
}
function textLengthToPx(text) {
    var span = document.createElement('span');
    span.innerHTML = text;
    span.className = 'invisible';
    document.body.appendChild(span);
    return span.offsetWidth;
}