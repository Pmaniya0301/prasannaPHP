************** For SearchFlight ************

1. Is source OR destination OR departure Date  information filled
    if no then show flights with greater departure date than today date
    if yes then check the any of them empty, give error
       else 
        if source and destionation same, give error
        if date is wrrong, give error
    show flight according to source destination and departure date
2. Is any filter filled
    if yes filter the flights
    if no show flight without filter
3. if click on book then goto second page



************** For BookFlight ************

1. Is name And no. of person filled
    if no then give error
    if yes then check the name is only character and has minimum 4 character
        if correct go to step 2
        else give error
2. Show the price with tax
3. when click book flight button go to BookingHistory page



************** For BookingHistory ************

1. show the history of booking where date is greater than today
2. if press on cancel button ask conformation
    if ok then cancel ticket
    if no then remain as it is