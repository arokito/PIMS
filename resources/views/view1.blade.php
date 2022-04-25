<html>


        <h2>USERS ENTRY PREVIEW</h2><br>

    <table  id="useres_details" border="1" cellpadding="10" cellspacing="0" class="table table-bordered">

      <thead>


              <th>name</th>
              <th>email</th>
            

      </thead>

      <tbody>
        @foreach($users as $user)
        <tr>


            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>

        </tr>
    @endforeach
      </tbody>
      </table>
<html>