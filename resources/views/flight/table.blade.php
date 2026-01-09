<div class="mt-3 col-12">
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>airline</td>
                <td>number of seats</td>
                <td>price</td>
                <td>tools</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($flights as $flight){?>
            <tr>
                <td>{{ $flight->id }}</td>
                <td>{{ $flight->name }}</td>
                <td>{{ $flight->airline }}</td>
                <td>{{ $flight->number_of_seats }}</td>
                <td>{{ $flight->price }}</td>
                <td>
                    <a class="btn btn-warning" href="/flights/{{ $flight->id }}">
                        แก้ไข
                    </a>
                    <form action="/flights/{{ $flight->id }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">ลบ</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
