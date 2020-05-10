<button type="reset" class="btn" id="reset">
    <span class="ladda-label">{{$slot}}</span>
</button>


<script type="text/javascript">
    $('#reset').on('click', function(e){

        $( ".select" ).each(function( index ) {
            $( this ).val('').change();
        });

    });

</script>