<form action="/create/add" method="post">
    @csrf

    <div class="row">
        <label for="title">Numele Companiei</label>
        <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="row">
        <label for="description">Descriere</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
    </div>

    <button type="submit">Adauga o companie</button> 

</form>

<form action="/create/addemployers" method="post">
    @csrf

    <div class="row">
        <label for="title">Id Companie</label>
        <input class="form-control" id="company_id" type="text" name="company_id" value="{{ old('company_id') }}">
    </div>

    <div class="row">
        <label for="description">Numele Angajatului</label>
        <input class="form-control" id="emp_name" type="text" name="emp_name" value="{{ old('emp_name') }}">
    </div>

    <button type="submit">Adauga Angajat</button> 

</form>