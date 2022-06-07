db.lesson.find({$and:[{type: "Laboratory"}, {title: "KI-20-2"}]}, {_id: 0}).pretty()

db.lesson.find({$and:[{name: "Ivaschenko G.S."}, {disciple: "Internet Technologies"}]}, {_id: 0}).pretty()

db.lesson.find({auditorium: "106i"}, {_id: 0}).pretty()