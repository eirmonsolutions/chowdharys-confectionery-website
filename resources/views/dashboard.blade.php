<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
            font-family: Arial, sans-serif;
        }

        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 270px;
            background: #111;
            color: #fff;
            padding: 30px 22px;
        }

        .sidebar h3 {
            font-weight: 800;
            margin-bottom: 30px;
        }

        .side-link {
            display: block;
            padding: 13px 15px;
            color: #fff;
            text-decoration: none;
            border-radius: 12px;
            margin-bottom: 8px;
            background: rgba(255,255,255,0.06);
        }

        .side-link:hover,
        .side-link.active {
            background: #c7a96b;
            color: #111;
        }

        .content {
            flex: 1;
            padding: 35px;
        }

        .topbar {
            background: #fff;
            padding: 22px 28px;
            border-radius: 20px;
            margin-bottom: 28px;
            box-shadow: 0 10px 35px rgba(0,0,0,.06);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-box {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 35px rgba(0,0,0,.06);
            margin-bottom: 25px;
        }

        .card-box h4 {
            font-weight: 800;
            margin-bottom: 20px;
        }

        .form-control,
        .form-select {
            height: 48px;
            border-radius: 12px;
        }

        .btn-main {
            background: #111;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 12px;
            font-weight: 700;
        }

        .btn-main:hover {
            background: #333;
            color: #fff;
        }

        .logout-btn {
            border: none;
            background: #dc3545;
            color: #fff;
            padding: 10px 22px;
            border-radius: 10px;
            font-weight: 700;
        }

        .menu-tree {
            border-left: 3px solid #c7a96b;
            padding-left: 18px;
        }

        .category-title {
            background: #f4efe3;
            padding: 14px 18px;
            border-radius: 12px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .sub-title {
            margin-left: 20px;
            background: #f8f8f8;
            padding: 10px 14px;
            border-radius: 10px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .item-name {
            margin-left: 45px;
            padding: 8px 12px;
            border-bottom: 1px dashed #ddd;
            color: #333;
        }

        .table th {
            background: #111;
            color: #fff;
        }

        @media(max-width: 768px) {
            .admin-layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="admin-layout">

    <div class="sidebar">
        <h3>Admin Panel</h3>
        <a href="#category" class="side-link active">Add Category</a>
        <a href="#subcategory" class="side-link">Add Sub Category</a>
        <a href="#item" class="side-link">Add Menu Item</a>
        <a href="#list" class="side-link">Menu List</a>
    </div>

    <div class="content">

        <div class="topbar">
            <div>
                <h2>Hello, Welcome Dashboard</h2>
                <p class="mb-0">Manage your menu categories, sub categories and items.</p>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logout-btn">Logout</button>
            </form>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">

            <div class="col-lg-4" id="category">
                <div class="card-box">
                    <h4>Add Category</h4>

                    <form method="POST" action="{{ route('dashboard.category.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label>Category Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Dairy / Snacks / Burger" required>
                        </div>

                        <button class="btn-main">Save Category</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4" id="subcategory">
                <div class="card-box">
                    <h4>Add Sub Category</h4>

                    <form method="POST" action="{{ route('dashboard.subcategory.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label>Select Category</label>
                            <select name="menu_category_id" class="form-select" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Sub Category Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Milk / Lassi / Butter" required>
                        </div>

                        <button class="btn-main">Save Sub Category</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4" id="item">
                <div class="card-box">
                    <h4>Add Menu Item</h4>

                    <form method="POST" action="{{ route('dashboard.menu-item.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label>Item Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Plain Lassi / Paneer Burger" required>
                        </div>

                        <div class="mb-3">
                            <label>Select Category</label>
                            <select name="menu_category_id" id="itemCategory" class="form-select" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Select Sub Category</label>
                            <select name="menu_sub_category_id" id="itemSubCategory" class="form-select">
                                <option value="">No Sub Category</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" placeholder="50">
                        </div>

                        <button class="btn-main">Save Menu Item</button>
                    </form>
                </div>
            </div>

        </div>

        <div class="card-box" id="list">
            <h4>Menu Structure Preview</h4>

            <div class="menu-tree">
                @forelse($categories as $category)
                    <div class="category-title">
                        {{ $category->name }}
                    </div>

                    @foreach($category->subCategories as $subCategory)
                        <div class="sub-title">
                            {{ $subCategory->name }}
                        </div>

                        @forelse($subCategory->items as $item)
                            <div class="item-name">
                                {{ $item->name }}
                                @if($item->price)
                                    - ₹{{ number_format($item->price, 2) }}
                                @endif
                            </div>
                        @empty
                            <div class="item-name text-muted">No item added</div>
                        @endforelse
                    @endforeach

                    @foreach($category->items->whereNull('menu_sub_category_id') as $item)
                        <div class="item-name">
                            {{ $item->name }}
                            @if($item->price)
                                - ₹{{ number_format($item->price, 2) }}
                            @endif
                        </div>
                    @endforeach

                @empty
                    <p>No menu added yet.</p>
                @endforelse
            </div>
        </div>

        <div class="card-box">
            <h4>All Menu Items</h4>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Item Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->category->name ?? '-' }}</td>
                                <td>{{ $item->subCategory->name ?? '-' }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    @if($item->price)
                                        ₹{{ number_format($item->price, 2) }}
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No items found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
    document.getElementById('itemCategory').addEventListener('change', function () {
        let categoryId = this.value;
        let subSelect = document.getElementById('itemSubCategory');

        subSelect.innerHTML = '<option value="">Loading...</option>';

        if (!categoryId) {
            subSelect.innerHTML = '<option value="">No Sub Category</option>';
            return;
        }

        fetch('/dashboard/get-subcategories/' + categoryId)
            .then(response => response.json())
            .then(data => {
                subSelect.innerHTML = '<option value="">No Sub Category</option>';

                data.forEach(function (sub) {
                    subSelect.innerHTML += `<option value="${sub.id}">${sub.name}</option>`;
                });
            });
    });
</script>

</body>
</html>