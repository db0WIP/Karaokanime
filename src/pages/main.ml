(* ************************************************************************** *)
(* Project: Karaokanime                                                       *)
(* Description: Karaokanime is a web community about anime karaoke.           *)
(* Author: db0 (db0company@gmail.com, http://db0.fr/)                         *)
(* Latest Version is on GitHub: https://github.com/db0company/Karaokanime     *)
(* ************************************************************************** *)

open Eliom_content
open Html5.D
open Eliom_parameter

let _ =

  Services.Karaokapp.register
    ~service:Services.main
    (fun () () ->

  let count nb =
    let rec aux n l = if (n >= 1) then aux (n - 1) (n::l) else l in aux nb [] in


  let home_images name =
    img ~alt:name ~src:(make_uri ~service:(Eliom_service.static_dir ())
			  ["images"; "accueil"; (name ^ ".jpg")]) () in

  let list_of_count total =
    ul (List.map (fun nb -> li [pcdata (string_of_int nb)]) (count total)) in

  let home_square name total =
    div ~a:[a_class ["home-square"]]
      [home_images name; list_of_count total] in 

  let news =
    let news_bottom name css = div ~a:[a_class ["news-bottom" ^ css]]
      [home_images name; list_of_count 5] in
    div ~a:[a_class ["news"]]
      [div ~a:[a_class ["news-square"]] [home_images "dernieres-news"];
       div ~a:[a_class ["news-bottom-right"]]
	 [news_bottom "top5-uploaders" "-right-2";
	  news_bottom "top5-karamakers" "-right-1"];
       div ~a:[a_class ["news-bottom"]]
	 [news_bottom "top5-donateurs" ""]] in

  let group =
    div ~a:[a_class ["group"]]
      [home_square "fluxrss" 0;
       home_square "forum" 0;
       home_square "dons" 0;
       home_square "t-shirt" 0] in

  Lwt.return
    (Pager.create
       [div ~a:[a_class ["homeright"]]
	   [home_square "top10-derniers-ajoutes" 10;
	    home_square "top10-plus-vus" 10;
	    home_square "top5-telecharges" 5;
	    home_square "playlist" 8];
	div ~a:[a_class ["homeleft"]]
	  [news;group]]))
