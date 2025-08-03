<style>
    .admin-container {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 250px;
        background: var(--dark-color);
        color: white;
        padding: 20px 0;
    }

    .sidebar-header {
        padding: 0 20px 20px;
        border-bottom: 1px solid #444;
    }

    .sidebar-header h3 {
        color: var(--primary-color);
    }

    .sidebar-menu {
        padding: 20px 0;
    }

    .sidebar-menu ul {
        list-style: none;
    }

    .sidebar-menu li {
        margin-bottom: 5px;
    }

    .sidebar-menu a {
        display: block;
        padding: 10px 20px;
        color: #ccc;
        transition: all 0.3s ease;
    }

    .sidebar-menu a:hover,
    .sidebar-menu a.active {
        background: rgba(255, 255, 255, 0.1);
        color: white;
    }

    .sidebar-menu i {
        margin-right: 10px;
        width: 20px;
        text-align: center;
    }

    .main-content {
        flex: 1;
        background: #f5f5f5;
        padding: 20px;
    }

    .header {
        background: white;
        padding: 15px 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header h2 {
        color: var(--dark-color);
    }

    .user-info {
        display: flex;
        align-items: center;
    }

    .user-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .stat-card {
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .stat-card h3 {
        color: #666;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .stat-card p {
        font-size: 28px;
        font-weight: 700;
        color: var(--primary-color);
    }

    .stat-card i {
        font-size: 40px;
        color: var(--primary-color);
        float: right;
        opacity: 0.3;
    }

    .recent-events {
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .recent-events h3 {
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    table th {
        background: #f9f9f9;
        font-weight: 500;
    }

    .status {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }

    .status.pending {
        background: #fff3cd;
        color: #856404;
    }

    .status.confirmed {
        background: #d4edda;
        color: #155724;
    }

    .status.cancelled {
        background: #f8d7da;
        color: #721c24;
    }

    .btn {
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 14px;
    }

    .btn-primary {
        background: var(--primary-color);
        color: white;
    }

    .btn-danger {
        background: var(--danger-color);
        color: white;
    }
</style>

<h2>Hello</h2>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>