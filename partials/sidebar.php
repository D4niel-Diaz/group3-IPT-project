<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="dashboard.php">
        <i class="bi bi-grid"></i>
        <span>DASHBOARD</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- Barangay Officials -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-toggle="collapse" href="#officials-nav">
        <i class="bi bi-person-badge"></i>
        <span>Officials</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="officials-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="history2018.php?section=officials-list">
            <i class="bi bi-circle"></i>
            <span>Officials List</span>
          </a>
        </li>
        
      </ul>
    </li><!-- End Officials Nav -->

    <!-- Certificates -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-toggle="collapse" href="#certificates-nav">
        <i class="bi bi-file-earmark-text"></i>
        <span>Certificates</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="certificates-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="certificate.php?section=certificate-requests">
            <i class="bi bi-circle"></i>
            <span>Certificate Requests</span>
          </a>
        </li>
      </ul>
    </li><!-- End Certificates Nav -->

    <!--Role Management-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="rolemanagement.php">
        <i class="bi bi-grid"></i>
        <span> Role Management</span>
      </a>
    </li>

    <!-- Blotter -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-toggle="collapse" href="#blotter-nav">
        <i class="bi bi-journal-text"></i>
        <span>Blotter</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="blotter-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="blotter.php?section=blotter-records">
            <i class="bi bi-circle"></i>
            <span>Blotter Records</span>
          </a>
        </li>
      </ul>
    </li><!-- End Blotter Nav -->





  </ul>

</aside><!-- End Sidebar -->
