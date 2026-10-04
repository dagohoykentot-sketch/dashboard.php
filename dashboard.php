<?php 
$curr_nav = "dashboard";
include 'Components/navigation.php';
?>

<link rel="stylesheet" href="main.css">
<main>
  <div class="main-content">
    
    <section class="overview">
      <h2>Welcome Back, Admin!</h2>
      <p>Here's an overview of your financial activities</p>

      <div class="overview-cards">
        <div class="card">
          <h3>Lent Loans</h3>
          <p>No Data</p>
        </div>
        <div class="card">
          <h3>Borrowed Loans</h3>
          <p>No Data</p>
        </div>
        <div class="card">
          <h3>Total Savings</h3>
          <p>No Data</p>
        </div>
        <div class="card">
          <h3>Funds Collected</h3>
          <p>No Data</p>
        </div>
      </div>
    </section>

    <section class="data-section">
      <div class="section-header">
        <h3>Active Loans</h3>
        <a href=" ">View All →</a>
      </div>

      <div class="data-cards">
        <div class="data-card empty">
          <p>No active loans available.</p>
        </div>
      </div>
    </section>

    <section class="data-section">
      <div class="section-header">
        <h3>Savings Goals</h3>
        <a href=" ">View All →</a>
      </div>

      <div class="data-cards">
        <div class="data-card empty">
          <p>No savings goals set.</p>
        </div>
      </div>
    </section>


    <section class="data-section">
      <div class="section-header">
        <h3>Active Funds</h3>
        <a href=" ">View All →</a>
      </div>

      <div class="data-cards">
        <div class="data-card empty">
          <p>No active funds yet.</p>
        </div>
      </div>
    </section>

  </div>
</main>

<?php include 'Components/footer.php'; ?>
