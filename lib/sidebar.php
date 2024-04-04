--------------------------------- sidebar ------------------------------------------
<div class="row ">
  <div class="col-12 col-md-3 col-lg-2">
    <div class="sidebar border-end border-info border-2 shadow ">
      <div class="d-flex  mt-4 pt-3 ms-3 " role="search">
        <input class="form-control me-2" type="search" id="data" placeholder="Search" aria-label="Search">
        <!-- <button class="btn btn-warning" id="serch" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> -->
      </div>
      <div class="accordion-flush  pt-3 mb-5" id="accordion">

      </div>
    </div>
  </div>


  <script type="text/javascript" src="<?php echo SITE_URL; ?>assets/index.js"></script>
  <script>
    var path = window.location.pathname.split("/");
    var pd = path[3];
    // console.log(window.location);
    var pn = path[5];
    // console.log(path);
    for (const iterator of mod) {
      // console.log(iterator);
      for (const i in iterator) {
        const element = iterator[i];
        for (const j in element) {
          // console.log(element[j]); 
          const element1 = element[j];
          for (const d in element1) {
            const element2 = element1[d];
            let accd = '';
            accd = `<div class="accordion-item">
        <h2 class="accordion-header">
        <button class="w-75 ms-3 btn btn-outline-info rounded-0 ${pd == d ? 'show' : ''}" type="button" data-bs-toggle="collapse" 
        data-bs-target="#${d}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">  
            ${d}
          </button>
        </h2> `;

            for (const key in element2) {
              const element3 = element2[key];

              accd += ` <div id="${d}" class="accordion-collapse collapse ${pd == d ? 'show' : ''}">
          <div class="accordion ms-3 px-1 ${pd == d && pn == element3.name ? 'bg-light' : ''} w-50" id="${d}">
          <p class="fs-9"><a class="nav-link " id="${element3.href}" href="<?php echo SITE_URL; ?>${i}/${d}/Assignments/${element3.name}/Source/${element3.href}">${element3.name}</a></p>
          </div>
          </div>
          </div>`;
            }
            $(accd).appendTo("#accordion");
          }
        }
      }
    }
  </script>
  <div class="col-12 col-md-8 col-lg-8 mb-5  mx-auto mt-5 ">