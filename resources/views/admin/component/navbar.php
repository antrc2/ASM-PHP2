<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    nav {
    background-color: #333;
    padding: 10px 0;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    gap: 15px;
}

nav ul li {
    display: inline-block;
}

nav ul li a {
    text-decoration: none;
}

nav ul li button {
    background-color: #555;
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

nav ul li button:hover {
    background-color: #777;
}
h1{
    text-align: center;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #333;
    color: white;
}

thead th {
    padding: 10px;
    text-align: left;
    border-bottom: 2px solid #444;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

tbody td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

tbody tr:hover {
    background-color: #f1f1f1;
}

td img {
    border-radius: 5px;
}

td button {
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 3px;
}

td button:hover {
    opacity: 0.8;
}

td a button {
    background-color: #007bff;
    color: white;
}

td a button:hover {
    background-color: #0056b3;
}

td a:last-child button {
    background-color: #dc3545;
    color: white;
}

td a:last-child button:hover {
    background-color: #a71d2a;
}
button{
    color: white;
    border: none;
    background-color: green;
    padding: 5px 10px;
}
</style>
<nav>
    <ul>
        <li><a href="?act=/"><button>Trang chủ</button></a></li>
        <li><a href="?act=dashboard"><button>Trang quản trị</button></a></li>
        <li><a href="?act=list-category"><button>Danh mục</button></a></li>
        <li><a href="?act=list-product"><button>Sản phẩm</button></a></li>
        <li><a href="?act=list-order"><button>Đơn hàng</button></a></li>
    </ul>
</nav>