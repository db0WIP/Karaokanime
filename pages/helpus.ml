(* ************************************************************************** *)
(* Project: Karaokanime                                                       *)
(* Description: Page to help the team with donations, contributions, ...      *)
(* Author: db0 (db0company@gmail.com, http://db0.fr/)                         *)
(* Latest Version is on GitHub: https://github.com/db0company/Karaokanime     *)
(* ************************************************************************** *)

open Eliom_content
open Html5.D
open Eliom_parameter

let _ =
  Services.Karaokapp.register
    ~service:Services.helpus
    (fun () () ->
      Lwt.return
        (Pager.create
	   [h1 [pcdata "Help us, money, money, money, tutorial, partners"]]))

