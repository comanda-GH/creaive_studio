<input type="hidden" name="post_id" id="post_id" value="<?php echo $post_id = get_the_ID(); ?>" />
<form name="set_from" id="set_from" enctype="multipart/form-data">
<table>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Text field</label>
        </th>
        <td>
            <input type="text" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Multiselect field</label>
        </th>
        <td>
            <!--<input type="text" id="meta_b" name="meta_b" value="<?php /*echo @get_post_meta($post->ID, 'meta_b', true); */?>" />-->
            <?php $value = @get_post_meta($post->ID, 'meta_b', true);
            $option = array("one", "two", "three", "four", "five");
            echo "<select id='meta_b' name='meta_b[]' multiple>";
            foreach ($option as $item) {
                $selected = ($value == $item) ? 'selected="selected"' : '';
                echo "<option value='$item' $selected>$item</option>";
            }
            echo "</select>";?>
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Upload img</label>
        </th>
        <td>
            <?php $preview = get_post_meta( $post->ID, 'meta_c', true ); ?>
            <input type="text" id="meta_c" name="meta_c"  value="<?php echo @get_post_meta($post->ID, 'meta_c', true); ?>" />
            <input id="preview_btn" type="button" value="upload">
        </td>
    </tr>
    <tr valign="top">
        <td>
            <input type="button" id="btn" value="Отправить" />
        </td>
    </tr>
</table>
