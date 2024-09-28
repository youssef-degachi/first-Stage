<script type="text/javascript">
    var basic_config = {
    <?php foreach  ($this->options['prepared_list'] as $item) { ?>
    'basic_<?php echo esc_attr($item['index']) ?>': {
            'hover': '<?php echo str_replace(array("\n", "\r", "\r\n", "'"), array('', '', '', "\'"), wp_kses_post($item['info_'])) ?>',
            'url': '<?php echo sanitize_url($item['url']) ?>',
            'target': '<?php echo esc_attr($item['turl']) ?>',
            'active': <?php echo esc_attr($item['enbl']) ? 'true' : 'false' ?>,
        },
    <?php } ?>
}
</script>
