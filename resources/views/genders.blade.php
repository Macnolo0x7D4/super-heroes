<div style="font-family: sans-serif; padding: 20px;">
    <h1 style="color: #333; margin-bottom: 20px; text-align: center;">Genders</h1>
    <table style="width: 100%; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <thead style="background-color: #f0f0f0;">
            <tr>
                <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd;">ID</th>
                <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd;">Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gender as $item)
                <tr style="{{ $loop->even ? 'background-color: #f9f9f9;' : '' }}">
                    <td style="padding: 12px 15px; border-bottom: 1px solid #eee;">{{ $item->id }}</td>
                    <td style="padding: 12px 15px; border-bottom: 1px solid #eee;">{{ $item->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
