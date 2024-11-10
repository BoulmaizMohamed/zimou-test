<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar (as before) -->
        <nav class="sidebar">
            <ul>
            <li>  <li><a href="/dashboard" onclick="showContent('home')">Home</a></li>
                <li><a href="#" onclick="showContent('stores')">stores</a></li>
                <li><a href="/packages" onclick="showContent('packages')">packages</a></li>
                <li><a href="#" onclick="showContent('contact')">Contact</a></li>
            </ul>
        </nav>

        <!-- Main Content Area -->
        <div class="main-content">
            
            <h2>Packages List</h2>
</br></br></br>
            <table>
            <a href="{{ route('packages.export') }}" class="export-button" >Export to Excel</a>
                <thead>
                    <tr>
                        <th>Tracking Code</th>
                        <th>Store Name</th>
                        <th>Package Name</th>
                        <th>Status</th>
                        <th>Client Full Name</th>
                        <th>Phone</th>
                        <th>Wilaya</th>
                        <th>Commune</th>
                        <th>Delivery Type</th>
                        <th>Status Name</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->tracking_code }}</td>
                            <td>{{ $package->store->name ?? 'N/A' }}</td>
                            <td>{{ $package->name }}</td>
                            <td>{{ $package->status->name ?? 'N/A' }}</td>
                            <td>{{ $package->client_first_name }} {{ $package->client_last_name }}</td>
                            <td>{{ $package->client_phone }}</td>
                            <td>{{ $package->commune->wilaya->name ?? 'N/A' }}</td>
                            <td>{{ $package->commune->name ?? 'N/A' }}</td>
                            <td>{{ $package->deliveryType->name ?? 'N/A' }}</td>
                            <td>{{ $package->status->name ?? 'N/A' }}</td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
            <div class="pagination-container">
    {{ $packages->links() }}
</div>
        </div>
    </div>
</body>
</html>
