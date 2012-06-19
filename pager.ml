(* ************************************************************************** *)
(* Project: Karaokanime                                                       *)
(* Description: Pager module. Tools to create Ocsigen pages.                  *)
(* Author: db0 (db0company@gmail.com, http://db0.fr/)                         *)
(* Latest Version is on GitHub: https://github.com/db0company/Karaokanime     *)
(* ************************************************************************** *)

open Eliom_content
open Html5.D
open Eliom_parameter

(* create : "Html body content" list -> "Html content"                        *)
(* Return a page correctly formatted with header and footer                   *)
(* containing the given body                                                  *)
let create body_content =
  (html
     (head (title
	      (pcdata (Karaokanime.title ^ " :: " ^ Karaokanime.slogan)))
	[(css_link ~uri:(make_uri (Eliom_service.static_dir ())
			   ["css";"style.css"]) ())])
     (body body_content))
