<table>
    <thead>
        <tr>
                <th>Disk name</th>
                <th>File Count</th>
                <th>Recorded at</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entries as $entry)
            <tr>
                <td>{{ $entry->disk_name }}</td>
                <td>{{ $entry->file_count }}</td>
                <td>{{ $entry->created_at->format('Y-m-d H:i:s') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
