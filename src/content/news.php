<div class="px-5 sm:px-10 md:px-14 xl:px-20 2xl:px-32 py-10">
          <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="h-full flex flex-col justify-center">
              <h1 class="mt-2 text-6xl text-blue">NEWS & UPDATES</h1>
              <div
                class="mt-5 border-4 border-solid border-blue border-y-0 border-r-0 px-5 py-5 text-light-black text-sm 2xl:text-base text-justify"
              >
                Our news and updates keep you informed about the latest
                developments that impact your organization. We utilize in-depth
                research and cutting-edge technology to bring you timely and
                relevant information, ensuring that our updates align with your
                business objectives and keep you ahead of the curve.
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
          <div
            id="news-container"
            class="mt-5 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-5"
          >
            <script>
                const news_list = [
                "https://images.pexels.com/photos/27907084/pexels-photo-27907084/free-photo-of-a-construction-site-with-scaffolding-and-a-building.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/9396159/pexels-photo-9396159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/7441094/pexels-photo-7441094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/3415148/pexels-photo-3415148.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/3321796/pexels-photo-3321796.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              ]
              const newsLists = news_list
                .map(
                  (news, i) => `
                        <div class="flex flex-col">
                      <div class="rounded-sm overflow-hidden border-b-2 border-solid border-blue border-x-0 border-t-0 bg-blue/10" style="aspect-ratio: 1/1;">
                        <img src="${news}" alt="" class="h-full w-full object-cover"/>
                      </div>
                      <a href="/hello/src/news-description.php" class="mt-3 no-underline hover:underline text-light-black font-semibold text-sm 2xl:text-base line-clamp-2">Kickoff Meeting for IMIS implementation in Birendranagar Municipality</a>
                  </div>
                      `
                )
                .join("");
              document.getElementById("news-container").innerHTML = newsLists;
            </script>
          </div>
        </div>