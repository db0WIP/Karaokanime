(* ************************************************************************** *)
(* Project: Gallery                                                           *)
(* Description: Example of usage of the module Gallery. See gallery.ml        *)
(* Author: db0 (db0company@gmail.com, http://db0.fr/)                         *)
(* Latest Version is on GitHub: https://github.com/db0company/Gallery         *)
(* ************************************************************************** *)

open Eliom_content
open Html5.D
open Eliom_parameter

module Example_app =
  Eliom_registration.App
    (struct
      let application_name = "karaokanime"
     end)

let main_service =
  Eliom_service.service
    ~path:[""]
    ~get_params:unit
    ()

let skeletton c =
  (html
     (head
	(title
	   (pcdata "Karaokanime ! :: Les karaokés des génériques de vos animes préférés")
	)
	[
	  (css_link ~uri:(make_uri (Eliom_service.static_dir ())
			    ["css";"style.css"]) ()
	  )
	]
     )
     (body
	c
     )
  )
    
let _ = 
  Example_app.register
    ~service:main_service
    (fun () () ->
      Lwt.return
        (skeletton [h1 [pcdata "Karaokanime"];
		    p [pcdata "Les karaokés des génériques de vos animes préférés"]
		   ])
    )
