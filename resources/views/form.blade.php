<form action="/" method="post">
    <div class='contanier'>
        <div class="row">
            <div class='col-3 d-flex'>
                <div>
                    <label for="" class='form-label'>Name</label>
                    <input type="text" class='form-control' name='name'>
                </div>
                <div>
                    <label for="" class='form-label'>Username</label>
                    <input type="text" class='form-control' name='username'>
                </div>
                <div>
                    <label for="" class='form-label'>Password</label>
                    <input type="text" class='form-control' name='password'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
            <button type="submit" class="btn btn-secondary">Register</button>
        </div>
    </div>
</form>