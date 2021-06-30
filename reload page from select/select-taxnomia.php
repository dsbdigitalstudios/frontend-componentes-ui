 <!--<nav data-title="filtrar" class="navTransparencia d-flex flex-wrap flex-row justify-content-start align-items-center">-->
 <nav data-title="" class="navTransparencia d-flex flex-wrap flex-row justify-content-start align-items-center">
                    
    <a href="<?php echo $dir[0];?>/noticias-elos/" >Últimos registros</a>
    <a href="" class="ativo"><?php echo single_cat_title('');?></a>
    <label for="dynamic_select" class="selectBox">
    <select id="dynamic_select" class="slecionecategoria">
        <option value="">Selecione categoria</option>
        <?php
            $terms = get_terms('noticias', array('order' => 'ASC', 'exclude' => ['13', '14']));

            if($terms){
                foreach ($terms as $cat) {
                echo '<option value="'.get_term_link($cat->term_id).'" >'.$cat->name.'</option>';
                }
            }
        ?>
    </select>
    </label>
    
    <?php get_search_form(); ?>
</nav>

<script>

$(function(){
    // bind change event to select
    $('#dynamic_select').on('change', function () {
        var url = $(this).val(); // get selected value
        if (url) { // require a URL
            window.location = url; // redirect
        }
        return false;
    });
});

</script>