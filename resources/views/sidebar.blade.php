<section>
   <div class="flex-shrink-0 mt-5 bg-warning">
      <ul class="list-unstyled ps-2">
         <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed p-0" data-bs-toggle="collapse" data-bs-target="#project-collapse" aria-expanded="true">
               <i class="fa-solid fa-chevron-down pe-1"></i> Progetti
            </button>
            <div class="collapse show" id="project-collapse">
               <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li>
                     <a href="/admin/projects" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Indice</a>
                  </li>
                  <li>
                     <a href="/admin/projects/create" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Crea nuovo progetto</a>
                  </li>
                  {{-- <li>
                     <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a>
                  </li> --}}
               </ul>
            </div>
         </li>
         {{-- <li class="mb-1">
               <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                  data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                  Dashboard
               </button>
               <div class="collapse" id="dashboard-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                     <li><a href="#"
                              class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                     <li><a href="#"
                              class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>
                     <li><a href="#"
                              class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>
                     <li><a href="#"
                              class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li>
                  </ul>
               </div>
         </li> --}}
      </ul>
   </div>
</section>
