var admin = {
      // (A) SHOW/HIDE "NOW LOADING" BLOCK
      loading : (show) => {
            var block = document.getElementById("page-loader");
            if (show) { block.classList.add("active"); }
            else { block.classList.remove("active"); }
      },

      // (B) TOGGLE SIDE BAR
      sidebar : () => {
            document.getElementById("page-sidebar").classList.toggle("active");
      },

      // (C) SIGN OFF
      bye : () => { if (confirm("Sign off?")) {
            admin.ajax({
                  url : url.host + "ajax-session.php",
                  data: { req : "out" },
                  ok : () => { location.reload(); }
            });
      }},

      // (D) AJAX FETCH
      // url : target url
      // data : data to send
      // ok : function to run on server "OK"
      ajax : (opt) => {
            // (D1) FORM DATA
            let data = new FormData();
            for (let [k, v] of Object.entries(opt.data)) { data.append(k, v); }

            // (D2) FETCH
            fetch(opt.url, { method: "POST", body:data })
            .then((res) => {
                  if (res.status != 200) {
                        alert(`Server ${res.status} error`);
                        console.error(res);
                  } else { return res.text(); }
            })
            .catch((err) => { console.error(err);});
      }
}; 