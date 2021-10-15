<div class="pouettbl" id="pouet_fileupload" style="width: 100%;">
    <h2>File Upload</h2>
    <div class="content" style="text-align: center">
        <table class="boxtable" style="width: 100%">
            <tr>
                <td>
                    <table>
                        {{ Form::open(['action' => 'RepairFileController@store']) }}
                        {{ Form::hidden('repair_id', $data->id) }}
                        <tr>
                            <td>Upload File</td>
                            <td>{{ Form::input('file', 'repfile') }}</td>
                        </tr>
                        <tr>
                            <td>Filetype</td>
                            <td>
                                {{ Form::select('filetype', [
    'Rechnung',
    'Lieferschein',
    'Foto',
    'Screenshot GSX',
    'Screenshot SAP',
    'Email',
    'Firmware-Files',
    'Sonstiges'
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
                <td>
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
                                    {{ $i->file_name }}<br>
                                </td>
                                <td>{{ $i->type }}</td>
                                <td>{{ $i->size }}</td>
                                <td>Action</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>
