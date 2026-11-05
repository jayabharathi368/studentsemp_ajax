<form id="employeeForm">
<input type="hidden" id="id" name="id">
<input id="name" name="name" placeholder="Name" required>
<input id="email" name="email" placeholder="Email" required>
<button>Save</button>
</form>
<p id="message"></p>
<div id="employeeList"></div>

<script>
let f=document.getElementById('employeeForm');
f.addEventListener('submit',e=>{
 e.preventDefault();
 fetch('save.php',{method:'POST',body:new FormData(f)})
 .then(r=>r.text()).then(d=>{
  document.getElementById('message').textContent=d;
  f.reset(); loadEmployees();
 });
});
function loadEmployees(){
 fetch('list.php').then(r=>r.text()).then(d=>document.getElementById('employeeList').innerHTML=d);
}
function editEmployee(id){
 fetch('edit.php?id='+id).then(r=>r.json()).then(e=>{
  id.value=e.id; name.value=e.name; email.value=e.email;
 });
}
loadEmployees();
</script>