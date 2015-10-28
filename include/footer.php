<!--/.footer-bottom-->
<?php if($alertForm){
    ?>
    <p class="alert alert-danger alert-dismissible"><?php echo $alertForm ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button></p>
<?php }; ?>

<?php if($alertFormSucces){
    ?>
    <p class="alert alert-succes alert-dismissible"><?php echo $alertFormSucces ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button></p>
<?php }; ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type='text/javascript'>

    $(document).ready(function() {

        /* activate scrollspy menu */
        $('body').scrollspy({
            target: '#navbar',
            offset: 50
        });

        /* smooth scrolling sections */
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 49
                    }, 1200);
                    return false;
                }
            }
        });


    });

    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });

</script>
<?php

