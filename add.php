<!DOCTYPE html>
<html><body>
<h2>Employee Form</h2>
<form id="f">
<input type="hidden" name="id" id="id">
<input type="text" name="name" id="name" placeholder="Name" required>
<input type="email" name="email" id="email" placeholder="Email" required>
<button type="submit">Save</button>
</form>
<hr>
<h3>Employee List</h3>
<div id="list"></div>
<script>
function load(){fetch('list.php').then(r=>r.text()).then(d=>{document.getElementById('list').innerHTML=d})}
load();
document.getElementById('f').addEventListener('submit',function(e){e.preventDefault();let d=new FormData(this);fetch('ajax.php',{method:'POST',body:d}).then(r=>r.text()).then(x=>{this.reset();document.getElementById('id').value='';load()})})
function editData(id,name,email){document.getElementById('id').value=id;document.getElementById('name').value=name;document.getElementById('email').value=email;}
function delData(id){if(confirm('Delete pannava?')){let d=new FormData();d.append('delete_id',id);fetch('ajax.php',{method:'POST',body:d}).then(r=>r.text()).then(x=>{load()})}}
</script>
</body></html>