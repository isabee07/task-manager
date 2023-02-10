
                       <form class="row g-3" action="/redirects/task.php" method="post">
  <div class="col-md-6">
    <label for="inputUser" class="form-label">User</label>
    <input type="text" class="form-control" id="inputUser" placeholder="User">
  </div>
  <div class="col-md-6">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="inputTitle" placeholder="Title">
  </div>
  <div class="col-12">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Description">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address </label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
  </div>
  <div class="col-md-6">
    <label for="inputStartdate" class="form-label">Start Date</label>
    <input type="text" class="form-control" id="inputStartdate" placeholder="Start Date">
  </div>
   <div class="col-md-6">
    <label for="inputDuedate" class="form-label">Due Date</label>
    <input type="text" class="form-control" id="inputDuedate" placeholder="Due Date">
  </div>
  <div class="col-md-4">
    <label for="inputtype" class="form-label">Type of task</label>
    <select id="inputtype" class="form-select">
      <option selected>Types of Tasks</option>
      <option>Chore</option>
      <option>Homework</option>
      <option>Event</option>
      <option>Project</option>
       <option>Trip</option>
       <option>Appointment</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputreward" class="form-label">Reward</label>
    <input type="text" class="form-control" id="inputreward" placeholder="Reward">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>