<?php get_header() ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td><?php echo esc_html( wp_get_current_user()->display_name ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td><?php echo esc_html( wp_get_current_user()->user_email ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td><?php echo esc_html( get_user_meta( get_current_user_id(), 'billing_address', true ) ); ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Shipping Address</th>
                        <td><?php echo esc_html( get_user_meta( get_current_user_id(), 'shipping_address', true ) ); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php get_footer() ?>