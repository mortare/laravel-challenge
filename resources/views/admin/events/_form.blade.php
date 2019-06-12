<div class="input-field">
  <input type="text" name="title" value="{{isset($register->title) ? $register->title : ''}}">
  <label>Title</label>
</div>

<div class="input-field">
  <input type="text" name="description" value="{{isset($register->description) ? $register->description : ''}}">
  <label>Description</label>
</div>

<div class="input-field">
  <input type="text" name="start_date" class="datepicker" value="{{isset($register->start_date) ? $register->start_date : ''}}">
  <label>Start Date</label>
</div>

<div class="input-field">
  <input type="text" name="end_date" class="datepicker" value="{{isset($register->end_date) ? $register->end_date : ''}}">
  <label>End Date</label>
</div>

<div class="input-field">
  <input type="text" name="id_user" value="{{isset($register->id_user) ? $register->id_user : ''}}">
  <label>Id User</label>
</div>
