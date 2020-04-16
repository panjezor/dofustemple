@php echo $content;
@endphp
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
    result = {
        needed_by: location.pathname.split('/')[2],
        offering: $('p.fleft').first().text().split('Find ')[1].split(' and')[0]
    };
    $.post('/almanax/add', result);

</script>
</body>
</html>