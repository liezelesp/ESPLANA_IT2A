@include('partials.header')
<?php $array = ['title' => 'Student System']; ?>
<x-nav :data="$array"/>

<section style="max-width: 400px; margin: 30px auto;">
    <h1 style="font-size: 24px; font-weight: bold; color: #333; text-align: center;">Student List</h1>
</section>

<section style="margin-top: 30px;">
    <div style="overflow-x: auto;">
        <table style="width: 400px; margin: 0 auto; font-size: 14px; text-align: left; color: #888;">
            <thead style="font-size: 12px; color: #444; background-color: #f8f8f8;">
                <tr>
                    <th scope="col" style="padding: 8px 12px;">First Name</th>
                    <th scope="col" style="padding: 8px 12px;">Last Name</th>
                    <th scope="col" style="padding: 8px 12px;">Email</th>
                    <th scope="col" style="padding: 8px 12px;">Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr style="background-color: #333; border-bottom: 1px solid #444; color: #fff;">
                    <td style="padding: 12px 12px;">{{$student->first_name}}</td>
                    <td style="padding: 12px 12px;">{{$student->last_name}}</td>
                    <td style="padding: 12px 12px;">{{$student->email}}</td>
                    <td style="padding: 12px 12px;">{{$student->age}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@include('partials.footer')
