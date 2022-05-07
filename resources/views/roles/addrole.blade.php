<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">
              <a href="{{ route('roles.home')}}" class="fas fa-arrow-left mt-2"></a>
              New Role
            </h1>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-5">
    <!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content">
        <div class="active tab-pane" id="activity">
          <!-- Post -->
          <div class="post" style="position: relative">
            <!-- /.user-block -->
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="name">
                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="5" placeholder="Enter ..." name="description"></textarea>
                </div>
                <div class="row">
                    <style>
                        .bootstrap-duallistbox-container .btn{
                            border-radius: inherit;
                        }
                    </style>
                    <div class="col-12">
                      <div class="form-group">
                        <label>Multiple</label>
                        <select class="duallistbox" multiple="" name="permissions[]">
                          <option value="feed_create">Creating Feeds</option>
                          <option value="feed_view">Viewing Feeds</option>
                          <option value="feed_update">Updating Feeds</option>
                          <option value="feed_delete">Deleting Feeds</option>
                          <option value="event_create">Creating Events</option>
                          <option value="event_view">Viewing Events</option>
                          <option value="event_update">Updating Events</option>
                          <option value="event_delete">Deleting Events</option>
                          <option value="user_create">Creating Users</option>
                          <option value="user_view">Viewing Users</option>
                          <option value="user_update">Updating Users</option>
                          <option value="user_delete">Deleting Users</option>
                          <option value="division_create">Creating Division</option>
                          <option value="division_view">Viewing Division</option>
                          <option value="division_update">Updating Division</option>
                          <option value="division_delete">Deleting Division</option>
                          <option value="sub_division_create">Creating Sub Division</option>
                          <option value="sub_division_view">Viewing Sub Division</option>
                          <option value="sub_division_update">Updating Sub Division</option>
                          <option value="sub_division_delete">Deleting Sub Division</option>
                          <option value="role_create">Creating Roles</option>
                          <option value="role_view">Viewing Roles</option>
                          <option value="role_update">Updating Roles</option>
                          <option value="role_delete">Deleting Roles</option>
                          <option value="report_create">Creating Reports</option>
                          <option value="report_view">Viewing Reports</option>
                          <option value="report_update">Updating Reports</option>
                          <option value="report_delete">Deleting Reports</option>
                          <option value="request_create">Creating Requests</option>
                          <option value="request_view">Viewing Requests</option>
                          <option value="request_update">Updating Requests</option>
                          <option value="request_delete">Deleting Requests</option>
                          <option value="profile_create">Creating Profile</option>
                          <option value="profile_view">Viewing Profile</option>
                          <option value="profile_update">Updating Profile</option>
                          <option value="profile_delete">Deleting Profile</option>
                          <option value="hall_of_fame_create">Creating Hall of Fame</option>
                          <option value="hall_of_fame_view">Viewing Hall of Fame</option>
                          <option value="hall_of_fame_update">Updating Hall of Fame</option>
                          <option value="hall_of_fame_delete">Deleting Hall of Fame</option>
                          <option value="message_create">Creating Messages</option>
                          <option value="message_view">Viewing Messages</option>
                          <option value="message_update">Updating Messages</option>
                          <option value="message_delete">Deleting Messages</option>
                          <option value="notification_create">Creating Notifications</option>
                          <option value="notification_view">Viewing Notifications</option>
                          <option value="notification_update">Updating Notifications</option>
                          <option value="notification_delete">Deleting Notifications</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                  </div>

                <button type="submit" class="btn btn-primary mt-5">Done</button>

            </form>
          </div>
          <!-- /.post -->
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
