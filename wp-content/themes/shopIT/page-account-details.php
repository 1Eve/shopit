<?php get_header() ?>


<div class="container border border-black mt-4 bg-white">
    <div class="container w-100 border-bottom border-black bg-white">ACCOUNT DETAILS</div>
    <div class="container border border-black mt-3 bg-white">
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
    <div class="d-grid gap-2 mt-5">
      <button class="btn btn-warning" type="button">EDIT DETAILS</button>
    </div>
</div>




<?php get_footer() ?>