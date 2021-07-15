<%@ page import ="tributar.sql.*" %>
<%
    String userid = request.getParameter("Correo");    
    String pwd = request.getParameter("contrasena");
    Class.forName("com.mysql.jdbc.Driver");
    Connection con = DriverManager.getConnection("jdbc:mysql://localhost/tributar",
            "tributar1", "Bogot418*");
    Statement st = con.createStatement();
    ResultSet rs;
    rs = st.executeQuery("select * from clientes where Correo='" + userid + "' and contrasena='" + pwd + "'");
    if (rs.next()) {
        session.setAttribute("userid", userid);
         response.sendRedirect("menu.jsp");
    } else {
       response.sendRedirect("errorLogin.jsp");
    }
%>


<!-- <%@ page import ="java.sql.*" %>
<%
    String userid = request.getParameter("username");    
    String pwd = request.getParameter("password");
    Class.forName("com.mysql.jdbc.Driver");
    Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/yourBDName",
            "root", "root");
    Statement st = con.createStatement();
    ResultSet rs;
    rs = st.executeQuery("select * from clientes where uname='" + userid + "' and pass='" + pwd + "'");
    if (rs.next()) {
        session.setAttribute("userid", userid);
         response.sendRedirect("menu.jsp");
    } else {
       response.sendRedirect("errorLogin.jsp");
    }
%> -->