<div class="container">
        <div class="row">
        <div class="col-md-10">
            <h3>Biodata Mahasiswa</h3>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-sm btn-success" href="{{ route('mhs.create') }}">Create New</a>
            </div>
        </div>
        <!-- @if ($message = Session::get('success'))
            </div class="alert alert-success">
                <p>{{"$message"}}</p>
             </div>
        @endif -->
 
        <table class="table table-hover table-sm">
        <tr>
        <th width="50px"><b>No.</b></th>
        <th width="300px"><b>Nama Mahasiswa.</b></th>
        <th>Jenis Kelamin</th>
        <th>Usia</th>
        <th>Alamat</th>
        <th width="180px">Action</th>
        <tr>
        <?php foreach ($mahasiswas as $mahasiswa): ?>
        <tr>
        <td><b>{{++$i}}.</b></td>
        <td><?php echo $mahasiswa->nama; ?></td>
        <td><?php echo $mahasiswa->gender; ?></td>
        <td><?php echo $mahasiswa->usia; ?></td>
        <td><?php echo $mahasiswa->alamat; ?></td>
        <td>
        <form action="#" method="post">
        <a class="btn btn-sm btn-primary" href="{{ route('mhs.show',$mahasiswa->id) }}">show</a>
        <a class="btn btn-sm btn-warning" href="#">Edit</a>
 
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        <?php endforeach; ?>
        </table>
 
        {!! $mahasiswas->links() !!}
    </div>