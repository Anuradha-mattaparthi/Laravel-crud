@php
    $user = "Anu";
    $fruits = ['Apple','Banana','grapes','promoogrannate'];
@endphp

<script>
    // var data = @json($fruits);
    var data = {{Js::from($fruits)}};

    data.forEach(entry => {
        document.write(entry+"<br/>");  
    });
    
</script>
