

<form id="enquiry">

    <div class="form-floating mb-3">
        <input type="text" name="voornaam" class="form-control" id="floatingInput" placeholder="Voornaam" required>
        <label for="floatingInput">Voornaam</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="achternaam" class="form-control" id="floatingInput" placeholder="Achternaam" required>
        <label for="floatingInput">Achternaam</label>
    </div>
    <div class="form-floating mb-5">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required> 
        <label for="floatingInput">e-mailadres</label>
    </div>   
    
    <!-- <select class="form-select mb-3" aria-label="Default select example">
        <option selected>Kies uw pakket</option>
        <option value="gratis">Gratis</option>
        <option value="toppositie">Toppositie</option>
        <option value="brons">Brons</option>
        <option value="zilver">Zilver</option>
        <option value="goud">Goud</option>
        <option value="diamant">Diamant</option>
    </select> -->

    <div class="form-floating">
        <select class="form-select mb-3" id="floatingSelect" aria-label="Floating label select example">
            <option value="gratis">Gratis</option>
            <option value="toppositie">Toppositie</option>
            <option value="brons">Brons</option>
            <option value="zilver">Zilver</option>
            <option value="goud">Goud</option>
            <option value="diamant">Diamant</option>
        </select>
        <label for="floatingSelect">Kies uw pakket</label>
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Verzenden</button>

</form>


<script>

    $('#enquiry').submit( function(event){


        event.preventDefault();
        
        var endpoint = '<?php echo admin_url('admin-ajax.php');?>';

        var form = $('#enquiry').serialize();

        var formdata = new FormData;

        formdata.append('action','enquiry');
        formdata.append('enquiry', form);

        $.ajax(endpoint, {

            type:'POST',
            data:formdata,
            processData: false,
            contentType: false,

            
            success:function(res){

                alert(res.data);

            },


            error: function(err)
            {

            }


        })



    })


</script>
