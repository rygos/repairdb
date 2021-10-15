<div class="pouettbl" id="pouet_fileupload" style="width: 100%;">
    <h2>File Upload</h2>
    <div class="content" style="text-align: center">
        <table class="boxtable" style="width: 100%">
            <tr>
                <td style="width: 25%">
                    <table>
                        {{ Form::open(['action' => 'RepairFileController@store', 'enctype' => 'multipart/form-data']) }}
                        {{ Form::hidden('repair_id', $data->id) }}
                        <tr>
                            <td>Upload File</td>
                            <td>{{ Form::file('file') }}</td>
                        </tr>
                        <tr>
                            <td>Filetype</td>
                            <td>
                                {{ Form::select('filetype', [
    'Rechnung' => 'Rechnung',
    'Lieferschein' => 'Lieferschein',
    'Foto' => 'Foto',
    'Screenshot GSX' => 'Screenshot GSX',
    'Screenshot SAP' => 'Screenshot SAP',
    'Email' => 'Email',
    'Firmware-Files' => 'Firmware-Files',
    'Sonstiges' => 'Sonstiges'
]) }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{ Form::submit('Submit') }}</td>
                        </tr>
                        {{ Form::close() }}
                    </table>
                </td>
                <td style="width: 75%">
                    <table class="boxtable" style="width: 100%">
                        <tr>
                            <td>File</td>
                            <td>Type</td>
                            <td>Size</td>
                            <td>Action</td>
                        </tr>
                        @foreach($repairfiles as $i)
                            <tr>
                                <td>
                                    @if($i->type == 'Foto')
                                        <a href="{{ action('RepairFileController@download', [$i->id]) }}">
                                            <img width="128px" alt="{{ $i->file_name }}" src="{{ asset('storage/'.$i->storage_path) }}"><br>
                                            {{ $i->file_name }}
                                        </a>
                                    @else
                                        <a href="{{ action('RepairFileController@download', [$i->id]) }}">{{ $i->file_name }}</a>
                                    @endif
                                </td>
                                <td>{{ $i->type }}</td>
                                <td>{{ \App\Helpers\MiscHelper::bytesToHuman($i->size) }}</td>
                                <td>
                                    <a href="{{ action('RepairFileController@delete', [$i->id]) }}">[delete file]</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>
