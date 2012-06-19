(* ************************************************************************** *)
(* Project: Karaokanime                                                       *)
(* Description: Karaokanime is a web community about anime karaoke.           *)
(* Author: db0 (db0company@gmail.com, http://db0.fr/)                         *)
(* Latest Version is on GitHub: https://github.com/db0company/Karaokanime     *)
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

let main () = 
  Example_app.register
    ~service:main_service
    (fun () () ->
      Lwt.return
        (Pager.create
	   [h1 [pcdata Karaokanime.title];
	    p [pcdata Karaokanime.slogan]
	   ]))

let _ = main ()
