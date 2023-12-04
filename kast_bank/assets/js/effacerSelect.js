 //Script js pour la selection du checkbox
 $(document).ready(function(){
    $('#toutselectionner').on('click',function(){
        if (this.cheked) {
            $('.checkbox').each(function(){
                this.cheked=true;
            });
        }else{
            $('.checkbox').each(function(){
                this.cheked=false;
            });
        }
    });
    $('.checkbox').on('click',function(){
        if($('.checkbox:cheked').lenght ==$('.checkbox').lenght){
            $('#toutselectionner').prop('cheked',true);
        }else{
            $('#toutselectionner').prop('cheked',false);
        }
    });
});