(* ************************************************************************** *)
(* Project: Karaokanime                                                       *)
(* Description: Contact page                                                  *)
(* Author: db0 (db0company@gmail.com, http://db0.fr/)                         *)
(* Latest Version is on GitHub: https://github.com/db0company/Karaokanime     *)
(* ************************************************************************** *)

open Eliom_content
open Html5.D
open Eliom_parameter

let _ =
  Services.Karaokapp.register
    ~service:Services.contact
    (fun () () ->
      Lwt.return
        (Pager.create
	   [h1 [pcdata "Contact"]]))

