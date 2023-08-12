<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
</head>

<body>
  <table>
    @foreach($staffs as $staff)
    <td>
      {{$staff['staff_id']}}
    </td>
    <td>
      {{$staff['first_name']}}
    </td>
    @endforeach
  </table>
</body>

</html>