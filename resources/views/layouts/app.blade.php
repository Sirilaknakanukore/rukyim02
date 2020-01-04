<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RUKYIM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    {{--<link rel="stylesheet" href="/css/style.css">--}}
    <link href="https://fonts.googleapis.com/css?family=Pridi&display=swap" rel="stylesheet">
</head>
<body style="background-color:#f8d9a9;">
@include('inc.navbar')
<div class="container mt-10">
    @include('inc.message')
    @yield('content')
</div>
<div id="myModal" class="modal fade" role="dialog"></div>
{{--<footer class="footer">--}}
    {{--<div class="container text-center">--}}
        {{--footer--}}
    {{--</div>--}}
{{--</footer>--}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<script>
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

<script>
    const BACKSPACE = 8;
    const ENTER = 13;
    // document.getElementById('search').addEventListener('keydown', adjust);

    function adjust(e) {
        const val = e.target.value;

        if (e.keyCode === BACKSPACE && !val) {
            deleteTag();
        }
        if (e.keyCode === ENTER && val) {
            e.target.value = '';
            addTag(val);
        }
        const textLength = textLengthToPx(val);
        const inputWidth = e.target.offsetWidth;
        const minThreshold = 5;
        const maxThreshold = 200;
        const delta = inputWidth - textLength;
        const shouldGrow = delta < minThreshold;
        const shouldShrink = delta > maxThreshold;

        if (shouldGrow) {
            setStyle(e.target, 'width', '90%');
        } else if (shouldShrink) {
            e.target.style = '';
        }
    }

    function deleteTag() {
        document.querySelectorAll('#tags > span')[document.querySelectorAll('#tags > span').length-1].remove();
    }

    function addTag(val) {
        const input = document.getElementById('search');
        const tag = document.createElement('span');
        const tagsContainer = document.getElementById('tags');
        const tags = document.querySelectorAll('.tag');
        tag.className = 'tag';
        tag.innerHTML = val;

        tagsContainer.insertBefore(tag, input);
    }

    function setStyle(node, rule, value) {
        node.style = `${rule}:${value}`;
    }


    function status(res) {
        document.getElementById('res').innerHTML = res;
    }

    function textLengthToPx(text) {
        const span = document.createElement('span');
        span.innerHTML = text;
        span.className = 'invisible';
        document.body.appendChild(span);
        return span.offsetWidth;
    }
</script>

<script>
    $(function(){
        $('.emoji').on('click', function(){
            $('.🐑').html($(this).html());
        });
    });
</script>

</body>
</html>
