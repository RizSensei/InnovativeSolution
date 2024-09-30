<div class="px-5 sm:px-10 md:px-14 xl:px-20 2xl:px-60 pt-10 pb-2">
          <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="h-full flex flex-col justify-center">
              <h1 class="mt-2 text-6xl text-blue">KNOWLEDGE PRODUCTS</h1>
              <div
                class="mt-5 border-4 border-solid border-blue border-y-0 border-r-0 px-5 py-5 text-light-black text-sm 2xl:text-base text-justify"
              >
                Welcome to our webpage on knowledge products, for sharing best
                practices, lessons learned, and success stories. On this
                webpage, you will find any type of knowledge products that we
                have produced such as reports, manuals, guides, briefs,
                webinars, videos, and more.
              </div>
            </div>
            <div class="hidden md:inline-block">
              <img
                src="/hello/public/images/vector-building.png"
                alt=""
                class="h-full w-full object-cover"
              />
            </div>
          </div>
        </div>

        <div
          class="px-5 sm:px-10 md:px-14 xl:px-20 2xl:px-60 py-5 h-full bg-gray-100"
        >
          <div
            id="projects-grid"
            class="mt-5 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-5"
          >
            <script>
              const projects = [
                "https://images.pexels.com/photos/27907084/pexels-photo-27907084/free-photo-of-a-construction-site-with-scaffolding-and-a-building.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/9396159/pexels-photo-9396159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/7441094/pexels-photo-7441094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/3415148/pexels-photo-3415148.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/3321796/pexels-photo-3321796.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
              ];
              document.getElementById("projects-grid").innerHTML += projects
                .slice(0, 5)
                .map(
                  (project, i) => `
                           <div>
                             <div  class="h-64 xl:h-80 2xl:h-96 w-full bg-light-black bg-opacity-10 rounded-md">
                                               <img src=${project} alt="" class="h-full w-full object-cover"/>
                                               </div>
                             <p class="mt-2 text-sm text-gray-500 line-clamp-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ratione accusamus dignissimos, suscipit aut dolor animi atque placeat a doloremque!                  </p>
                           </div>
                          `
                )
                .join("");
            </script>
          </div>
        </div>