<h2>Order Product Screen</h2>

<h1>Add Order</h1>

<div class="container">
    <form action="dataRequest" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="Name">First Name</label>
            <input type="text" class="form-control" id="name" name="First_Name">
        </div>

        <div class="form-group">
            <label for="Name">Last Name</label>
            <input type="text" class="form-control" id="name" name="Last_Name">
        </div>

        <button type="submit" class="btn btn-success btn-lg">Insert User</button>

    </form>
</div>
