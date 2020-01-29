<input type="hidden" name="user_id" value="{{Auth::user()->id}}">

<div class="form-group @error('name') has-error @enderror">
    <label for="name">Nama</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="@isset($students){{$students->name}}@endisset" autocomplete="off">
    @error('name')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>

<div class="form-group @error('phone_number') has-error @enderror">
    <label for="phone_number">No. Handphone</label>
    <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Enter phone number" value="@isset($students){{$students->phone_number}}@endisset">
    @error('phone_number')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>

<div class="form-group @error('gender') has-error @enderror">
    <label for="gender">Jenis Kelamin</label>
    <br>
    <input type="radio" name="gender" id="male" value="male" @isset($students){{ ($students->gender == "male") ? "checked" : "" }}@endisset>
    Laki-Laki &nbsp;
    <input type="radio" name="gender" id="female" value="female" @isset($students){{ ($students->gender == "female") ? "checked" : "" }}@endisset>
    Perempuan
    @error('gender')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>

<div class="form-group @error('religion') has-error @enderror">
    <label for="religion">Agama</label>
    <select name="religion" id="religion" class="form-control">
        <option value="">- Pilih Agama -</option>
        <option value="Islam" @isset($students){{ ("Islam" == $students->religion)  ? "selected" : "" }}@endisset>Islam</option>
        <option value="Kristen Katolik" @isset($students){{ ("Kristen Katolik" == $students->religion)  ? "selected" : "" }}@endisset>Kristen Katolik</option>
        <option value="Kristen Protestan" @isset($students){{ ("Kristen Protestan" == $students->religion)  ? "selected" : "" }}@endisset>Kristen Protestan</option>
        <option value="Hindu" @isset($students){{ ("Hindu" == $students->religion)  ? "selected" : "" }}@endisset>Hindu</option>
        <option value="Buddha" @isset($students){{ ("Buddha" == $students->religion)  ? "selected" : "" }}@endisset>Buddha</option>
        <option value="Kong Hu Cu" @isset($students){{ ("Kong Hu Cu" == $students->religion)  ? "selected" : "" }}@endisset>Kong Hu Cu</option>
    </select>
    @error('religion')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>

<div class="form-group @error('address') has-error @enderror">
    <label for="address">Alamat</label>
    <textarea name="address" id="address" cols="30" rows="5" class="form-control">@isset($students){{$students->address}}@endisset</textarea>
    @error('address')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>
