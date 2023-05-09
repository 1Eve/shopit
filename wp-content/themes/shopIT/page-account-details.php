<?php get_header() ?>

<style>

    .containerr{
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        border-radius: 8px;
        padding: 0;
        padding-top: 0.5%;
        height: 80vh;
    }
    .details{
        background-color: white;
        width: 100%;
        padding: 0.5%;
        padding-left: 2%;
        padding-top: 2%;
        
    }
    .info{
        border: 1px solid black;
        height: 100%;
        margin: 3%;
        margin-top: 0;
    }

    .left-right{
        margin: 2%;
        padding: 1.5%;
        display: flex;
        height: 70%;
        background-color: #ffffff;
        width: 98%;       
    }
    .info-left{
        width: 50%;
    }
    .info-right{
        width: 40%;
    }
</style>

<div class="containerr">
    <div class="details">
        <h3>ACCOUNT DETAILS</h3>
    </div>
    <div class="info">
        <div class="left-right">
        <div class="info-left">
            <p>Name: <?php echo esc_html( wp_get_current_user()->display_name ); ?></p>
            <p>Email: <?php echo esc_html( wp_get_current_user()->user_email ); ?></p>
        </div>
        <div class="info-right">
            <p>Tell:</p>
            <P>Address: <?php echo esc_html( get_user_meta( get_current_user_id(), 'billing_address', true ) ); ?></P>
        </div>
        </div>  
        <div class="" style="justify-content:center; align-items: center; display: flex; ">
      <button class="btn" type="button" style="background-color:#F68B1E; width:40%;">EDIT DETAILS</button>
    </div>
    </div>
</div>



<?php get_footer() ?>