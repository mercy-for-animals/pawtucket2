{{{<ifcount code="ca_entities.related" restrictToTypes="school" min="1"><H6><ifcount code="ca_entities.related" restrictToTypes="school" min="1" max="1">School</ifcount><ifcount code="ca_entities.related" restrictToTypes="school" min="2">Schools</ifcount></H6><unit relativeTo="ca_objects_x_entities" restrictToTypes="school"><unit relativeTo="ca_entities"><l>^ca_entities.preferred_labels.displayname</l></unit> (^relationship_typename)</unit></ifcount>}}}
{{{<ifcount code="ca_places.related"  min="1"><H6>Place<ifcount code="ca_places.related"  min="2">s</ifcount></H6><unit relativeTo="ca_objects_x_places" delimiter=", "><unit relativeTo="ca_places" delimiter=", "><l>^ca_places.preferred_labels.name</l></unit> (^relationship_typename)</unit></ifcount>}}}
{{{<ifcount code="ca_entities.related" excludeRelationshipTypes="repository,original_source,subject" excludeTypes="school" min="1"><H6><ifcount code="ca_entities.related" min="1" max="1">Person/Organization</ifcount><ifcount code="ca_entities.related"  min="2">People/Organizations</ifcount></H6><unit relativeTo="ca_objects_x_entities" excludeRelationshipTypes="repository,original_source,subject" excludeTypes="school"><unit relativeTo="ca_entities"><l>^ca_entities.preferred_labels.displayname</l></unit> (^relationship_typename)</unit></ifcount>}}}
{{{<ifcount code="ca_collections.related" excludeTypes="collection,source" min="1"><H6>Fond<ifcount code="ca_collections.related" excludeTypes="collection,source" min="2">s</ifcount>/Archival Collection<ifcount code="ca_collections.related" excludeTypes="collection,source" min="2">s</ifcount></H6><unit relativeTo="ca_objects_x_collections" excludeTypes="collection,source" delimiter=", "><unit relativeTo="ca_collections"><l>^ca_collections.preferred_labels.name</l></unit> (^relationship_typename)</unit></ifcount>}}}
{{{<ifcount code="ca_occurrences.related" restrictToTypes="exhibitions" min="1"><H6>Exhibition<ifcount code="ca_occurrences.related" restrictToTypes="exhibitions" min="2">s</ifcount></H6><unit relativeTo="ca_objects_x_occurrences" restrictToTypes="exhibitions" delimiter=", "><unit relativeTo="ca_occurrences"><l>^ca_occurrences.preferred_labels.name</l></unit> (^relationship_typename)</unit></ifcount>}}}
{{{<ifcount code="ca_occurrences.related" restrictToTypes="historical" min="1"><H6>Historical Event<ifcount code="ca_occurrences.related" restrictToTypes="historical" min="2">s</ifcount></H6><unit relativeTo="ca_objects_x_occurrences" restrictToTypes="historical" delimiter=", "><unit relativeTo="ca_occurrences"><l>^ca_occurrences.preferred_labels.name</l></unit> (^relationship_typename)</unit></ifcount>}}}
{{{<ifcount code="ca_occurrences.related" restrictToTypes="institutional" min="1"><H6>Insitutional Event<ifcount code="ca_occurrences.related" restrictToTypes="institutional" min="2">s</ifcount></H6><unit relativeTo="ca_objects_x_occurrences" restrictToTypes="institutional" delimiter=", "><unit relativeTo="ca_occurrences"><l>^ca_occurrences.preferred_labels.name</l></unit> (^relationship_typename)</unit></ifcount>}}}
{{{<ifdef code="ca_objects.themes"><div class='unit'><h6>Subject<ifcount code="ca_objects.themes" min="2">s</ifcount></h6><unit relativeTo="ca_objects" delimiter=", ">^ca_objects.themes</unit></div></ifdef>}}}
{{{<ifcount code="ca_objects.related" min="1"><H6>Object<ifcount code="ca_objects.related" min="2">s</ifcount></H6><unit relativeTo="ca_objects.related" delimiter="<br/>"><l>^ca_objects.preferred_labels.name</l> <unit relativeTo="ca_objects_x_objects">(^relationship_typename)</unit></unit></ifcount>}}}
